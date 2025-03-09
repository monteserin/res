import {
  collection, getDocs, query, doc, addDoc, deleteDoc, setDoc,
} from 'firebase/firestore';
import { db } from './firebase';

const guestsCollection = collection(db, 'guests');

// CREATE
export const createGuest = (obj) => {
  addDoc(guestsCollection, obj);
};

// READ
export const getGuests = async () => {
  const result = await getDocs(query(guestsCollection));
  return result.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
};

// DELETE
export const deleteGuest = async (id) => {
  console.log(id);
  await deleteDoc(doc(guestsCollection, id));
};
