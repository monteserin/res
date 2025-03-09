import { combineReducers } from 'redux';
import grades from './grade/reducer';

export const rootReducer = combineReducers({
  grades,
});
