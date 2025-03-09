extends Node2D
@export var rocket:PackedScene
@onready var timer = $Timer

# Called when the node enters the scene tree for the first time.
func _ready():
	timer.timeout.connect(put_missile)

func put_missile():
	var m = rocket.instantiate()
	add_child(m)
	m.position.x = randf_range(0, get_viewport_rect().size.x)
	m.position.y = -60
	timer.wait_time = timer.wait_time*0.9
