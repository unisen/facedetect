from deepface import DeepFace

result = DeepFace.verify(
  img1_path = "images/adriana.jpg",
  img2_path = "images/adriana4.jpg",
)

print(result)