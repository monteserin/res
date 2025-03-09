import { createSlice } from '@reduxjs/toolkit';

const { actions, reducer } = createSlice({
  name: 'rectangle',
  initialState: {
    rectangleArea: '',
  },
  reducers: {
    setRectangleArea: (state, { payload }) => {
      state.rectangleArea = payload;
    },
  },
});

export default reducer;

export const { setRectangleArea } = actions;
