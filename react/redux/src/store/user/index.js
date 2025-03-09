import * as actions from './actions';

const initialState = {
    name: null,
    age: null,
};

const reducer = (state = initialState, action) => {
    switch (action.type) {
        case actions.setUserNameAction :
            return { ...state, name: action.payload }
        case actions.setUserAgeAction :
            return { ...state, age: action.payload }
        default:
            return state;
    }
}

export const selectUserName = (store) => store.user.name;

export default reducer;
