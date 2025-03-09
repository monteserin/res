import {
  collection, getDocs, getDoc, query, doc, addDoc, deleteDoc, updateDoc, writeBatch,
} from 'firebase/firestore';
import { db } from './firebase';

const personsCollection = collection(db, 'persons');

export const savePersonName = (name) => {
  addDoc(personsCollection, { name });
};

export const getPersons = async () => {
  const result = await getDocs(query(personsCollection));
  return result;
};

export const deletePerson = async (id) => {
  await deleteDoc(doc(db, 'persons', id));
};

export const updatePerson = async (id, name) => {
  await updateDoc(doc(db, 'persons', id), { name });
};

export const batchOperation = async (id) => {
  const batch = writeBatch(db);

  batch.update(doc(db, 'persons', id), { name: 'test' });
  batch.update(doc(db, 'persons', id), { name: 'test2' });
  batch.commit();
};
