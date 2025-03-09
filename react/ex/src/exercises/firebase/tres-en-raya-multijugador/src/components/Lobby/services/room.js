import {
  auth,
  signInWithEmailAndPassword,
  createUserWithEmailAndPassword,
  signOut,
  GoogleAuthProvider,
  signInWithPopup,
  sendPasswordResetEmail,
  fetchSignInMethodsForEmail,
  sendEmailVerification,
  db,
  doc,
  getDoc,
  getDocs,
  collection,
  setDoc,
  updateDoc,
  deleteDoc,
  addDoc,
  query,
  where,
  onSnapshot,
} from "../../../services/firebase";

const collectionName = "rooms";

// CREATE
export const createRoom = async (roomId) => {
  const room = await getRoomById(roomId);
  if (room) {
    console.log("Room already exists");
  } else {
    const colRef = collection(db, collectionName);
    await setDoc(doc(colRef, roomId), {});
  }
  return roomId;
};

export const getRoomById = async (id) => {
  const docRef = doc(db, collectionName, id);
  const result = await getDoc(docRef);
  return result.data();
};

export const onRoomUpdated = (roomId, callback) => {
  onSnapshot(doc(db, "rooms", roomId), (doc) => {
    callback(doc.data());
  });
};

export const guestEnterInRoom = async (roomId) => {
  const docRef = doc(db, collectionName, roomId);
  await updateDoc(docRef, { guestIsReady: true, board: Array(9).fill(null) });
};

/////////////////////////////////////////////////////////

export const updateBoard = async (id, board) => {
  const docRef = doc(db, collectionName, id);
  await updateDoc(docRef, { board }, { merge: true });
};

export const updateRoomData = async (id, newRoomData) => {
  const docRef = doc(db, collectionName, id);
  await updateDoc(docRef, newRoomData, { merge: true });
};

// UPDATE
export const updateItem = async (id, obj) => {
  const docRef = doc(db, collectionName, id);
  await updateDoc(docRef, obj);
};

// READ
export const getItems = async () => {
  const colRef = collection(db, collectionName);
  const result = await getDocs(query(colRef));
  return getArrayFromCollection(result);
};

// READ WITH WHERE
// Tener en cuenta que el tipo de dato de la condición debe coincidir con el tipo de dato que hay en Firebase o no obtendré un dato de respuesta
export const getItemsByCondition = async (value) => {
  const colRef = collection(db, collectionName);
  const result = await getDocs(query(colRef, where("age", "==", value)));
  return getArrayFromCollection(result);
};

export const getItemById = async (id) => {
  const docRef = doc(db, collectionName, id);
  const result = await getDoc(docRef);
  return result.data();
};

// DELETE
export const deleteItem = async (id) => {
  const docRef = doc(db, collectionName, id);
  await deleteDoc(docRef);
};

const getArrayFromCollection = (collection) => {
  return collection.docs.map((doc) => {
    return { ...doc.data(), id: doc.id };
  });
};
