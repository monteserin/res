import {
  collection, getDocs, query, doc, addDoc, deleteDoc, setDoc, where, updateDoc,
} from 'firebase/firestore';
import { db } from '../firebase';

const collectionName = 'user';

const usersCollection = collection(db, collectionName);

export const getUsers = async () => {
  const result = await getDocs(query(usersCollection));
  return result.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
};

const getIdByUserName = async (userName) => {
  const result = await getDocs(query(usersCollection, where('name', '==', userName)));
  return result.docs[0].id;
};

export const access = async (name) => {
  const result = await getDocs(query(usersCollection, where('name', '==', name)));
  console.log(result.docs);
  if (result.docs.length == 0) {
    addDoc(usersCollection, { name });
  }
  const id = getIdByUserName(name);
  return id;
};
