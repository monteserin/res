import { createSlice } from '@reduxjs/toolkit';

const { actions, reducer } = createSlice({
  name: 'grades',
  initialState: {
    grades: '',
  },
  reducers: {
    setGrades: (state, { payload }) => {
      state.grades = payload;
    },
  },
});

export default reducer;

export const { setGrades } = actions;
