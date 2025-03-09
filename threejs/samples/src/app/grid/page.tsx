"use client";
import { Canvas } from "@react-three/fiber";
import { Grid, OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas camera={{ position: [3, 3, 3] }}>
      <OrbitControls />

      <mesh>
        <Grid sectionSize={3} cellSize={1} infiniteGrid />
        <boxGeometry />
      </mesh>
    </Canvas>
  );
};

export default page;
