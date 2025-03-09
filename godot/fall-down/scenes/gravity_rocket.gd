extends CharacterBody2D
@onready var sprite_2d = $Sprite2D
@export var explosion_scene: PackedScene
@export var lose_scene: PackedScene
var gravity = ProjectSettings.get_setting("physics/2d/default_gravity")/20

func _physics_process(delta):
	velocity.y += gravity * delta
	move_and_slide()

func _input(event):
	if event is InputEventMouseButton and event.pressed and event.button_index == MOUSE_BUTTON_LEFT:
		if sprite_2d.get_rect().has_point(to_local(event.position)):
			var i  = explosion_scene.instantiate()
			get_parent().add_child(i)
			i.global_position = global_position
			queue_free()

func _process(delta):
	if position.y >  get_viewport_rect().size.y:
		var new_scene = lose_scene.instantiate()
		get_tree().root.add_child(new_scene)
