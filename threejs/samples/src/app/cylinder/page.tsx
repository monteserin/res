"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />

      <mesh>
        <cylinderGeometry args={[1, 1.5, 2, 30]} />
        <meshBasicMaterial color="brown" wireframe />
      </mesh>
    </Canvas>
  );
};

export default page;
