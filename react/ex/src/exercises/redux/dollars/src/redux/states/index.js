import { combineReducers } from 'redux';
import money from './money/reducer';

export const rootReducer = combineReducers({
  money,
});
