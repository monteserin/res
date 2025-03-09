import {
  collection, getDocs, query, doc, addDoc, deleteDoc, setDoc, where, updateDoc, getDoc,
} from 'firebase/firestore';
import { db } from '../firebase';

const collectionName = 'hilos';

const hilosCollection = collection(db, collectionName);

export const createHilo = async (nombre, userId) => {
  addDoc(hilosCollection, { nombre, autor: userId });
};

export const createComentario = async (hiloId, comentario) => {
  const hilo = await getHiloById(hiloId);
  const prevComentarios = hilo.comentarios ? [...hilo.comentarios, comentario] : [comentario];
  await updateDoc(doc(db, collectionName, hiloId), { ...hilo, comentarios: prevComentarios });
};

// READ
export const getHilos = async () => {
  const result = await getDocs(query(hilosCollection));
  return result.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
};

export const getHiloById = async (id) => {
  const result = await getDoc(doc(db, collectionName, id));
  return { ...result.data(), id };
};
