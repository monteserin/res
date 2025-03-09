"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />

      <group position={[-2, -2, 0]} scale={[2, 2, 2]} rotation-y={Math.PI / 4}>
        <mesh position={[-1, 0, 0]}>
          <boxGeometry />
          <meshBasicMaterial color="red" />
        </mesh>
        <mesh position={[0, 0, 0]}>
          <boxGeometry />
          <meshBasicMaterial color="blue" />
        </mesh>
        <mesh position={[1, 0, 0]}>
          <boxGeometry />
          <meshBasicMaterial color="green" />
        </mesh>
      </group>
    </Canvas>
  );
};

export default page;
