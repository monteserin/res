"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas camera={{ position: [3, 3, 3] }}>
      <OrbitControls />

      <mesh>
        <boxGeometry />
        <meshBasicMaterial color="green" />
      </mesh>
    </Canvas>
  );
};

export default page;
