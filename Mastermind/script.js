// Récupérer les éléments de la configuration
const numColorsInput = document.getElementById('numColors');
const numToGuessInput = document.getElementById('numToGuess');
const startGameBtn = document.getElementById('startGame');
const maxAttemptsInput = document.getElementById('maxAttempts');

// Récupérer les autres éléments du jeu
const attemptsContainer = document.getElementById('attemptsContainer');
const resultPinsContainer = document.getElementById('resultPinsContainer');
const palette = document.querySelector('.palette');
const resetGameBtn = document.getElementById('resetGame');
const resetGuessBtn = document.getElementById('resetGuess');
const submitGuessBtn = document.getElementById('submitGuess');
const colorSlots = Array.from(document.querySelectorAll('.current-combination .circle'));
const customAlert = document.getElementById('customAlert');
const alertMessage = document.getElementById('alertMessage');
const closeAlert = document.getElementById('closeAlert');
const rulesBtn = document.getElementById('rules');

// Palette de couleurs initiale (avec 9 couleurs par défaut)
const allColors = ['red', 'orange', 'yellow', 'green', 'darkblue', 'violet', 'cyan', 'saddlebrown', 'indigo'];


// Variables pour configurer le jeu
let numColors = parseInt(numColorsInput.value);
let numToGuess = parseInt(numToGuessInput.value);
let maxAttempts = parseInt(maxAttemptsInput.value);
let secretCombination = [];
let selectedColors = [];
let attemptCount = 0;
let isGameReset = false;


// Générer une combinaison secrète basée sur le nombre de couleurs disponibles et à deviner
function generateSecretCombination() {
    const colors = allColors.slice(0, numColors); // Limiter les couleurs disponibles en fonction de la config
    let combination = [];
    for (let i = 0; i < numToGuess; i++) {
        const randomIndex = Math.floor(Math.random() * colors.length);
        combination.push(colors[randomIndex]);
    }
    return combination;
}

// Mettre à jour la palette de couleurs en fonction du nombre de couleurs disponibles
function updatePalette() {
    const paletteContainer = document.querySelector('.palette');
    paletteContainer.innerHTML = ''; // Réinitialiser la palette

    for (let i = 0; i < numColors; i++) {
        const colorCircle = document.createElement('div');
        colorCircle.classList.add('circle');
        colorCircle.style.backgroundColor = allColors[i];
        colorCircle.dataset.color = allColors[i];
        paletteContainer.appendChild(colorCircle);
    }
}

// Démarrer le jeu avec les paramètres choisis
startGameBtn.addEventListener('click', () => {
    numColors = parseInt(numColorsInput.value);
    numToGuess = parseInt(numToGuessInput.value);
    maxAttempts = parseInt(maxAttemptsInput.value);

    if (numColors < 4 || numToGuess < 4 || numColors > 10 || numToGuess > 6 || maxAttempts < 1 || maxAttempts > 10) {
        showAlert('Configuration non conforme.');
        return;
    }

    secretCombination = generateSecretCombination();
    updatePalette();
    updateCurrentCombinationUI();

    // Créer un result-pin à chaque fois que le jeu commence
    createResultPins(); 

    // Bascule entre les sections
    document.querySelector('.config').style.display = 'none';
    document.querySelector('.mastermind').style.display = 'flex';
});

// Fonction pour créer les result-pins
function createResultPins() {
    const resultPins = document.createElement('div');
    resultPins.classList.add('result-pins');

    for (let i = 0; i < numToGuess; i++) {
        const pin = document.createElement('div');
        pin.classList.add('pin'); // Pins vides au départ
        resultPins.appendChild(pin);
    }

    resultPinsContainer.appendChild(resultPins);
}

// Ajouter un écouteur pour la palette de couleurs
palette.addEventListener('click', (e) => {
    if (e.target.classList.contains('circle')) {
        const color = e.target.dataset.color;

        if (selectedColors.length < numToGuess) {
            selectedColors.push(color);
            updateCurrentCombination();
        } else {
            showAlert(`Vous avez déjà sélectionné ${numToGuess} couleurs.`);
        }
    }
});

// Mettre à jour l'affichage de la combinaison actuelle
function updateCurrentCombination() {
    colorSlots.forEach((slot, index) => {
        slot.style.backgroundColor = selectedColors[index] || 'transparent';
    });
}

// Valider la combinaison soumise
submitGuessBtn.addEventListener('click', () => {
    if (selectedColors.length < numToGuess) {
        showAlert(`Veuillez sélectionner ${numToGuess} couleurs avant de soumettre votre tentative.`);
        return;
    }

    // Vérifier si le joueur a atteint la limite d'essais AVANT de soumettre une nouvelle tentative
    if (attemptCount >= maxAttempts) {
        showAlert(`Vous avez atteint la limite de `+maxAttempts+` essais. Partie terminée. La combinaison secrète était : `, secretCombination);
        resetGame();
        return;
    }

    // Incrémenter le compteur d'essais
    attemptCount++;

    const result = evaluateCombination(selectedColors);
    displayAttempt(selectedColors, result);
    checkForWin(result);

    // Vérifier si la limite est atteinte après cette tentative (et après l'incrémentation)
    if (attemptCount === maxAttempts) {
        showAlert(`Vous avez atteint la limite de `+maxAttempts+` essais. Partie terminée. La combinaison secrète était : `, secretCombination);
        resetGame();
    } else {
        selectedColors = [];
        updateCurrentCombination();
    }
});


// Évaluer la combinaison de l'utilisateur
function evaluateCombination(guess) {
    let correctPosition = 0;
    let correctColor = 0;
    const tempSecret = [...secretCombination];
    const tempGuess = [...guess];

    // Vérifier les positions correctes
    for (let i = 0; i < guess.length; i++) {
        if (guess[i] === tempSecret[i]) {
            correctPosition++;
            tempSecret[i] = null;
            tempGuess[i] = null;
        }
    }

    // Vérifier les couleurs correctes
    tempGuess.forEach((color) => {
        if (color && tempSecret.includes(color)) {
            correctColor++;
            tempSecret[tempSecret.indexOf(color)] = null;
        }
    });

    return { correctPosition, correctColor };
}

// Afficher la tentative et les résultats
function displayAttempt(colors, result) {
    const attempt = document.createElement('div');
    attempt.classList.add('attempt');

    // Créer la tentative visuelle
    colors.forEach(color => {
        const circle = document.createElement('div');
        circle.classList.add('circle');
        circle.style.backgroundColor = color;
        attempt.appendChild(circle);
    });

    // Ajouter la tentative à la liste des essais
    attemptsContainer.appendChild(attempt);

    // Mettre à jour le dernier conteneur de result-pins
    const lastResultPins = resultPinsContainer.lastElementChild;

    if (lastResultPins) {
        const pins = lastResultPins.querySelectorAll('.pin');
        let filledPins = 0;

        // Ajouter les pins noires pour les bonnes positions
        for (let i = 0; i < result.correctPosition; i++) {
            pins[filledPins].classList.add('black');
            filledPins++;
        }

        // Ajouter les pins blanches pour les bonnes couleurs
        for (let i = 0; i < result.correctColor; i++) {
            pins[filledPins].classList.add('white');
            filledPins++;
        }
    }

    // Créer un nouveau conteneur vide de result-pins pour le prochain test
    const resultPins = document.createElement('div');
    resultPins.classList.add('result-pins');

    for (let i = 0; i < numToGuess; i++) {
        const pin = document.createElement('div');
        pin.classList.add('pin'); // Pins vides au départ
        resultPins.appendChild(pin);
    }

    resultPinsContainer.appendChild(resultPins);
}


// Mettre à jour les cercles de la combinaison actuelle
function updateCurrentCombinationUI() {
    const combinationContainer = document.querySelector('.current-combination');
    combinationContainer.innerHTML = '';

    for (let i = 0; i < numToGuess; i++) {
        const circle = document.createElement('div');
        circle.classList.add('circle');
        circle.style.backgroundColor = 'transparent';
        combinationContainer.appendChild(circle);
    }

    colorSlots.length = 0;
    colorSlots.push(...document.querySelectorAll('.current-combination .circle'));
}

// Vérifier si l'utilisateur a gagné
function checkForWin(result) {
    if (result.correctPosition === numToGuess) {
        showAlert("Félicitations, vous avez gagné en "+attemptCount+" essais !\nLa combinaison secrète était : ", secretCombination);
        resetGame();
    }
}

rulesBtn.addEventListener('click', () => {
    document.getElementById('rulesModal').classList.remove('hidden');
});

// Fermer la pop-up des règles
document.getElementById('closeRules').addEventListener('click', () => {
    document.getElementById('rulesModal').classList.add('hidden');
});

resetGuessBtn.addEventListener('click', () => {
    selectedColors = []; // Réinitialiser la sélection actuelle
    updateCurrentCombination(); // Mettre à jour l'affichage
});

// Réinitialiser le jeu
resetGameBtn.addEventListener('click', () => {
    isGameReset = true; // Indiquer que le jeu a été réinitialisé
    document.querySelector('.config').style.display = 'flex';
    document.querySelector('.mastermind').style.display = 'none';
    resetGame();
});

function resetGame() {
    selectedColors = [];
    updateCurrentCombination();
    attemptsContainer.innerHTML = '';
    
    // Réinitialiser les pins de résultats avant d'ajouter de nouveaux pins
    resultPinsContainer.innerHTML = '';  
    secretCombination = generateSecretCombination();
    attemptCount = 0; // Réinitialiser le compteur d'essais
    console.log('New Secret Combination:', secretCombination); // Debugging purposes

    // Créer de nouveaux result-pins pour la nouvelle partie uniquement si le jeu n'a pas été réinitialisé
    if (!isGameReset) {
        createResultPins();  
    } else {
        isGameReset = false; // Réinitialiser l'indicateur après la réinitialisation
    }
}


// Afficher un message d'alerte
function showAlert(message, secretCombination = null) {
    alertMessage.textContent = message;

    // Si une combinaison secrète est fournie, l'afficher sous forme de cercles
    if (secretCombination) {
        const secretMessageContainer = document.createElement('div');
        secretMessageContainer.classList.add('secret-combination');

        secretCombination.forEach(color => {
            const circle = document.createElement('div');
            circle.classList.add('circle');
            circle.style.backgroundColor = color;
            secretMessageContainer.appendChild(circle);
        });

        alertMessage.appendChild(secretMessageContainer);
    }

    customAlert.classList.remove('hidden');
}

// Fermer l'alerte
closeAlert.addEventListener('click', () => {
    customAlert.classList.add('hidden');
});
