export const getPeople = (page = 1) => instance.get(`/people/?page=${page}`);
