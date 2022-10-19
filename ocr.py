import pyocr
from PIL import Image,ImageGrab
import pyperclip as pc
import re

pyocr.tesseract.TESSERACT_CMD = r"C:\Program Files\Tesseract-OCR\tesseract.exe"
tools = pyocr.get_available_tools()
tool = tools[0]

img = ImageGrab.grabclipboard()

builder = pyocr.builders.TextBuilder(tesseract_layout=6)
text = tool.image_to_string(img, lang="jpn", builder=builder)

print(text)


