import { createSlice } from '@reduxjs/toolkit';

const { actions, reducer } = createSlice({
  name: 'listing',
  initialState: {
    personas: [],
  },
  reducers: {
    setRectangleArea: (state, { payload }) => {
      state.data = payload;
    },
  },
});

export default reducer;

export const { setData } = actions;
