import firebase, { db } from './firebase';
import { collection, getDocs, getDoc, query, doc, addDoc, deleteDoc, updateDoc, writeBatch, where } from "firebase/firestore";

const itemsCollection = collection(db, 'items');
const ordersCollection = collection(db, 'orders');


export const getProducts = async () => {
    const result = await getDocs(query(itemsCollection));
    return getArrayFromCollection(result);
}

export const getProductById = async (id) => {
    const result = await getDoc(doc(itemsCollection, id));
    return result.data();
}

export const getItemsByCategory = async (id) => {
    const result = await getDocs(query(itemsCollection, where('categoryId', '==', parseInt(id))));
    return result.docs.map(doc => doc.data());
}

export const saveOrder = async (order) => {
    addDoc(ordersCollection, order);
}

export const createItem = (obj) => {
    return addDoc(itemsCollection, obj).id;
}


const getArrayFromCollection = (collection) => {
    return collection.docs.map(doc => {
        return { ...doc.data(), id: doc.id };
    });
}