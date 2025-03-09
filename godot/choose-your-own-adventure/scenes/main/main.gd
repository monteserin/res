extends Control
@export var spaceship_scene:PackedScene
@export var earth_scene:PackedScene





func _on_earth_button_pressed():
	var new_scene = earth_scene.instantiate() 
	get_tree().root.add_child(new_scene)


func _on_spaceship_button_pressed():
	var new_scene = spaceship_scene.instantiate() 
	get_tree().root.add_child(new_scene)

