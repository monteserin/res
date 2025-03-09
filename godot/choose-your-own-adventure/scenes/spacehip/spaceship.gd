extends Control
@export var monster_scene:PackedScene
@export var earth_scene:PackedScene

func _on_boss_button_pressed():
	var new_scene = monster_scene.instantiate() 
	get_tree().root.add_child(new_scene)

func _on_home_button_pressed():
	var new_scene = earth_scene.instantiate() 
	get_tree().root.add_child(new_scene)
