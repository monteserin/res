"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />

      <mesh position={[-1, 0, 0]}>
        <boxGeometry />
        <meshBasicMaterial color="red" />
      </mesh>
      <mesh position={[0, 0, 0]}>
        <boxGeometry />
        <meshBasicMaterial color="green" />
      </mesh>
      <mesh position={[1, 0, 0]}>
        <boxGeometry />
        <meshBasicMaterial color="blue" />
      </mesh>
    </Canvas>
  );
};

export default page;
