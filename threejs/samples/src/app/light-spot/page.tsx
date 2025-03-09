"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />
      <spotLight intensity={0.5} color="red" />

      <mesh>
        <boxGeometry />
        <meshStandardMaterial color="white" />
      </mesh>
    </Canvas>
  );
};

export default page;
