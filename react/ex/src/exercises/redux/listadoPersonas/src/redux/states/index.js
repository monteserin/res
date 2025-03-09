import { combineReducers } from 'redux';
import listing from './listing/reducer';

export const rootReducer = combineReducers({
  listing,
});
