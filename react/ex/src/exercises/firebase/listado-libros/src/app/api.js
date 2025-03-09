import {
  collection, getDocs, query, doc, getDoc, addDoc, deleteDoc, updateDoc, setDoc, where,
} from 'firebase/firestore';
import firebase, { db } from './firebase';

const collectionName = 'books';
const pacientsCollection = collection(db, collectionName);

// CREATE
export const createBook = (obj) => {
  addDoc(pacientsCollection, obj);
};

// READ
export const getBooks = async () => {
  const result = await getDocs(query(pacientsCollection));
  return result.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
};

// DELETE
export const deleteBook = async (id) => {
  await deleteDoc(doc(db, collectionName, id));
};

export const updateBook = async (id, obj) => {
  console.log(obj);
  await updateDoc(doc(db, collectionName, id), obj);
};

export const getBookById = async (id) => {
  const result = await getDoc(doc(db, collectionName, id));
  return result.data();
};
