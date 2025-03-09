import { i } from "./api";
import axios from "axios";

export const getCharacters = async (page = 1) => {
  const response = await i.get("/people?page=" + page);
  return response.data;
};

export const getCharacterById = async (id) => {
  const response = await i.get(`/people/${id}`);
  return response.data;
};

export const getFilms = async (filmUrls) => {
  const films = await Promise.all(
    filmUrls.map(async (url) => {
      const data = await axios.get(url);
      return data.data;
    })
  );
  return films;
};
