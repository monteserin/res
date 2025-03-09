"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />

      <mesh position={[-1, 0, 0]} scale={[0.5, 0.5, 0.5]}>
        <boxGeometry />
        <meshBasicMaterial color="red" />
      </mesh>
      <mesh position={[0, 0, 0]} scale={[1, 1, 1]}>
        <boxGeometry />
        <meshBasicMaterial color="green" />
      </mesh>
      <mesh position={[1, 0, 0]} scale={[2, 2, 2]}>
        <boxGeometry />
        <meshBasicMaterial color="blue" />
      </mesh>
    </Canvas>
  );
};

export default page;
