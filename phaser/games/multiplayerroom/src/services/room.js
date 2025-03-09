import { db, getDocs, collection, query, where } from "./firebase";

// CREATE
export const createRoom = async () => {
  const colRef = collection(db, "rooms");
  const ms = new Date().getTime();
  console.log(ms);
  const obj = {
    date: ms,
    id: 1234,
  };
  // await addDoc(colRef, obj);
  return obj.id;
};

export const getRoomById = async (roomId) => {
  const colRef = collection(db, "rooms");
  const result = await getDocs(
    query(colRef, where("id", "==", Number(roomId)))
  );
  const doc = getArrayFromCollection(result);
  return doc[0];
};

const getArrayFromCollection = (collection) => {
  return collection.docs.map((doc) => {
    return { ...doc.data(), id: doc.id };
  });
};
