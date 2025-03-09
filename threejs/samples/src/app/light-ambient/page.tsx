"use client";
import { Canvas } from "@react-three/fiber";
import { OrbitControls } from "@react-three/drei";

const page = () => {
  return (
    <Canvas>
      <OrbitControls />
      <ambientLight intensity={1} color={"blue"} />
      {/* <directionalLight intensity={10000} color={"blue"} position={[0, 0, 5]} /> */}
      {/* <spotLight intensity={3000} color={"blue"} position={[0, 0, 5]} /> */}
      <mesh position={[5, 0, 0]}>
        <boxGeometry />
        <meshStandardMaterial color="white" />
      </mesh>
    </Canvas>
  );
};

export default page;
