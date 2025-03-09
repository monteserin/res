import {
  collection, getDocs, query, doc, addDoc, deleteDoc, setDoc, where, updateDoc,
} from 'firebase/firestore';
import { db } from '../firebase';

const collectionName = 'messages';
const messagesCollection = collection(db, collectionName);

export const createMessage = async (remitenteId, destinatarioId, msg) => {
  addDoc(messagesCollection, { remitenteId, destinatarioId, msg });
};

// READ
export const getMessages = async (id) => {
  console.log('getMessages', id);
  const result = await getDocs(query(messagesCollection, where('destinatarioId', '==', id)));
  return result.docs.map((doc) => ({ ...doc.data(), id: doc.id }));
};
