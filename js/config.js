// js/config.js

// Game Definitions
export const MAJOR_GAMES = [
    { code: '6/58', name: 'Ultra Lotto 6/58' },
    { code: '6/55', name: 'Grand Lotto 6/55' },
    { code: '6/49', name: 'Super Lotto 6/49' },
    { code: '6/45', name: 'Mega Lotto 6/45' },
    { code: '6/42', name: 'Lotto 6/42' }
];

export const DIGIT_GAMES = [
    { code: '6D', name: '6D Lotto' },
    { code: '4D', name: '4D Lotto' },
    { code: '3D', name: '3D Lotto' },
    { code: '2D', name: '2D Lotto' }
];

// Schedule Logic
export const SCHEDULE_ORDER = {
    '11AM': 1, '11 AM': 1, '11:00AM': 1,
    '2PM': 2, '2 PM': 2, '14:00': 2,
    '4PM': 3, '4 PM': 3, '16:00': 3,
    '5PM': 4, '5 PM': 4, '17:00': 4,
    '9PM': 5, '9 PM': 5, '21:00': 5
};

// Game Rules (UPDATED with fixedPrize)
export const GAME_RULES = {
    '6/58': { max: 58, type: 'major', count: 6 },
    '6/55': { max: 55, type: 'major', count: 6 },
    '6/49': { max: 49, type: 'major', count: 6 },
    '6/45': { max: 45, type: 'major', count: 6 },
    '6/42': { max: 42, type: 'major', count: 6 },
    '6D':    { max: 9,  type: 'digit', count: 6 },
    '4D':    { max: 9,  type: 'digit', count: 4 },
    // Added fixedPrize for 3D and 2D
    '3D':    { max: 9,  type: 'digit', count: 3, fixedPrize: 4500 },
    '2D':    { max: 31, type: 'digit', count: 2, fixedPrize: 4000 }
};

// API Endpoints
export const API_URL = 'api.php';
export const EMAIL_URL = 'send_email.php';