import { createSlice } from '@reduxjs/toolkit';

const { actions, reducer } = createSlice({
  name: 'listing',
  initialState: {
    people: [],
  },
  reducers: {
    setRectangleArea: (state, { payload }) => {
      state.people = payload;
    },
  },
});

export default reducer;

export const { setData } = actions;
