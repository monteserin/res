"use client";
import { Canvas } from "@react-three/fiber";
import {
  CameraControls,
  Environment,
  OrbitControls,
  Text,
} from "@react-three/drei";
import Trees from "./Trees";
const page = () => {
  return (
    <Canvas>
      <OrbitControls />
      <Trees />
      <Environment preset="sunset" />
    </Canvas>
  );
};

export default page;
