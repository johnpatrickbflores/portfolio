# -*- coding: utf-8 -*-
"""music.ipynb

Automatically generated by Colab.

Original file is located at
    https://colab.research.google.com/drive/1zzgMhEWaHpOLmgjq0y9OApQtHFqskAgY
"""



from google.colab import files
uploaded = files.upload()

import io
import pandas as pd

data = pd.read_csv(io.BytesIO(uploaded['music.csv']))

data

x = data.drop(columns=['genre'])
y = data['genre']

from sklearn.model_selection import train_test_split
x_train, x_test, y_train, y_test = train_test_split(x, y, test_size = 0.5)

from sklearn.tree import DecisionTreeClassifier

model = DecisionTreeClassifier()

model.fit(x_train.values , y_train)

prediction = model.predict(x_test.values)
print(x_test)
prediction

from sklearn.metrics import accuracy_score

score = accuracy_score(y_test, prediction)

score