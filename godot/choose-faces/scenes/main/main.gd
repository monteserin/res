extends Control
@export var btns:Array[Button]
@export var imgs:Array[Texture2D]
@onready var solution_img = $Container/TextureRect/SolutionImg


func _ready():
	reset()


func reset():
	imgs.shuffle()
	var count : int = 0
	for button in btns:
		button.icon = imgs[count]
		button.connect("pressed",checkSolution.bind(imgs[count]))
		count+=1
	var rightImg = btns.pick_random()
	solution_img.texture = rightImg.icon


func checkSolution(texture):
	print(texture)
	
