import { combineReducers } from 'redux';
import rectangle from './rectangle/reducer';

export const rootReducer = combineReducers({
  rectangle,
});
