import { createSlice } from '@reduxjs/toolkit';

const { actions, reducer } = createSlice({
  name: 'user',
  initialState: {
    name: '',
    isLoading: false,
  },
  reducers: {
    setName: (state, { payload }) => {
      state.name = payload;
    },
    setLoader: (state, { payload }) => {
      state.isLoading = payload;
    },
  },
});

export default reducer;

export const { setName, setLoader } = actions;
