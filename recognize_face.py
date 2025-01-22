from deepface import DeepFace
import sys
import time

result = DeepFace.verify(
  img1_path = sys.argv[1],
  img2_path = sys.argv[2],
)

#print(result['verified'])

print(result)
#time.sleep(3)

# py recognize_face.py "images/mulher.jpg" "images/1.png"        