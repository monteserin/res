export const setUserNameAction = 'SET_USER_NAME';
export const setUserAgeAction = 'SET_USER_AGE';

export const setUserName = (userName) => ({
    type: setUserNameAction,
    payload: userName,
});

export const setUserAge = (age) => ({
    type: setUserAgeAction,
    payload: age,
});