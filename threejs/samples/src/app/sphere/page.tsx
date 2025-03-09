"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />

      <mesh>
        <sphereGeometry args={[2, 10, 10]} />
        <meshBasicMaterial color="brown" wireframe />
      </mesh>
    </Canvas>
  );
};

export default page;
