"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas camera={{ position: [3, 3, 3] }}>
      <OrbitControls />

      <mesh rotation-x={-Math.PI / 2} position-y={-3}>
        <planeGeometry args={[10, 10]} />
      </mesh>
    </Canvas>
  );
};

export default page;
