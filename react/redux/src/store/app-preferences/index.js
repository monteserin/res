import * as actions from './actions';

const initialState = {
    theme: 'light',
};

const reducer = (state = initialState, action) => {
    switch (action.type) {
        case actions.setThemeAction :
            return { ...state, theme: action.payload }
        default:
            return state;
    }
}

export const selectTheme = (store) => store.appPreferences.theme;

export default reducer;
