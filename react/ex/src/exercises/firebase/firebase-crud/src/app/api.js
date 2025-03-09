import {
  collection, getDocs, getDoc, query, doc, addDoc, deleteDoc, updateDoc, writeBatch, where,
} from 'firebase/firestore';
import { db } from './firebase';

const personsCollection = collection(db, 'persons');

export const savePersonName = (obj) => {
  addDoc(personsCollection, obj);
};

export const getPersons = async () => {
  const result = await getDocs(personsCollection);
  return getArrayFromCollection(result);
};

export const deletePerson = async (id) => {
  await deleteDoc(doc(personsCollection, id));
};

export const updatePerson = async (id, name) => {
  await updateDoc(doc(personsCollection, id), { name });
};

export const batchOperation = async (id) => {
  const batch = writeBatch(db);

  batch.update(doc(personsCollection, id), { name: 'test' });
  batch.update(doc(personsCollection, id), { name: 'test2' });
  batch.commit();
};

const getArrayFromCollection = (collection) => collection.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
