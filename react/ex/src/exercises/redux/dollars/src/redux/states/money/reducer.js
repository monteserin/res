import { createSlice } from '@reduxjs/toolkit';

const { actions, reducer } = createSlice({
  name: 'money',
  initialState: {
    euros: '',
  },
  reducers: {
    setEuros: (state, { payload }) => {
      state.euros = payload;
    },
  },
});

export default reducer;

export const { setEuros } = actions;
