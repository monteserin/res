import {
  collection, getDocs, query, doc, getDoc, addDoc, deleteDoc, updateDoc, setDoc, where,
} from 'firebase/firestore';
import firebase, { db } from './firebase';

const pacientsCollection = collection(db, 'pacients');

// CREATE
export const createPacient = (obj) => {
  addDoc(pacientsCollection, obj);
};

// READ
export const getPacients = async () => {
  const result = await getDocs(query(pacientsCollection));
  return result.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
};

// DELETE
export const deletePacient = async (id) => {
  await deleteDoc(doc(db, 'pacients', id));
};

export const updatePacient = async (id, obj) => {
  await updateDoc(doc(db, 'pacients', id), obj);
};

export const getPacientById = async (id) => {
  const result = await getDoc(doc(db, 'pacients', id));
  return result.data();
};
