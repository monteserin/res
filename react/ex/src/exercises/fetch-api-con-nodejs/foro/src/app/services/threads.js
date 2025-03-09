import axios from 'axios';
// const i = axios.create({ baseURL: 'http://localhost:5000/' });
const i = axios.create({ baseURL: 'https://nodejs-foro.herokuapp.com/' });

export const createThread = async (txt) => {
  i.post('/thread', { txt });
};

// READ
export const getThreads = async () => {
  const data = await i.get('/thread');
  return data.data;
};

export const getCommentsFromThread = async (id) => {
  const data = await i.get(`/comment/${id}`);
  console.log('ssssssssssssssssss', data.data);
  return data.data;
};

export const saveComment = async (txt, threadId) => {
  const data = await i.post('/comment', { txt, threadId });
  return data.data;
};
