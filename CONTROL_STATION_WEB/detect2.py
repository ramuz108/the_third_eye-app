#Author: Ramachandran A Dr.Gireeshan MG
#Opens camera in the back-end and detect for objects using a Machine Learning Model 
#uses Tensorflow,Keras,OpenCV and Matapolib
#!/usr/bin/env python
from imageai.Detection import VideoObjectDetection  #using imageAI
import os
import time as t
import cv2 #using opencv
import datetime
import sys
def forSeconds(second_number, output_arrays, count_arrays, average_output_count): #callback function for every second
    x=output_arrays
    if x[0]['name']=='person' or x[0]['name']=='bicycle' or x[0]['name']=='car' or x[0]['name']=='bus' or x[0]['name']=='motorcycle' or x[0]['name']=='truck':
        sys.exit(x[0]['name']) #provide the output with the threat
execution_path = os.getcwd()
camera = cv2.VideoCapture(0) #opening camera. Uses webcam for demonstration ;-)

detector = VideoObjectDetection()
detector.setModelTypeAsRetinaNet()
detector.setModelPath(os.path.join(execution_path , "resnet50_coco_best_v2.0.1.h5")) #retinanet model used for detection
detector.loadModel()

# imageAI detection function with detection probability of 30%
detections = detector.detectObjectsFromVideo(camera_input=camera,save_detected_video=False,frames_per_second=20,per_frame_function=forSeconds, minimum_percentage_probability=30, return_detected_frame=True)







