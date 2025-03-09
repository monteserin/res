"use client";
import { useEffect, useRef } from "react";
import { Canvas } from "@react-three/fiber";
import { CameraControls } from "@react-three/drei";
import Trees from "./Trees";
const page = () => {
  const controls = useRef();

  const intro = async () => {
    controls.current.dolly(-22);
    // controls.current.smothTime = 1.6;
    // controls.current.dolly(22, true);
  };

  useEffect(() => {
    intro();
  }, []);
  return (
    <Canvas>
      {/* Fadding effect basado en el nivel de zoom */}
      <fog attach="fog" args={["#f0f0f0", 0, 40]} />

      <CameraControls ref={controls} />
      <Trees />
    </Canvas>
  );
};

export default page;
