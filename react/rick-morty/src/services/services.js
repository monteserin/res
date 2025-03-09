import { i } from "./api";

export const getCharacters = async () => {
  const r = await i.get("/character");
  return r.data.results;
};

export const getCharacterById = async (id) => {
  const r = await i.get(`/character/${id}`);
  return r.data;
};
