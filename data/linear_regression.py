# -*- coding: utf-8 -*-
"""linear_regression.ipynb

Automatically generated by Colab.

Original file is located at
    https://colab.research.google.com/drive/10FY2B9hK-5YUKmVaTpgZR8n-o5I7AGpf
"""

import pandas as pd
import numpy as np
from sklearn.datasets import load_diabetes
import seaborn as sns

diabetes = load_diabetes()

my_df = pd.DataFrame(diabetes.data, columns=diabetes.feature_names)

my_df['target'] = diabetes.target

my_df.head()

X = my_df.drop('target', axis = 1)
y = my_df['target']

from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2)
print(X_train.shape, y_train.shape)

from sklearn.linear_model import LinearRegression
lr = LinearRegression()

lr.fit(X_train, y_train)

#predictions that can be compared to actual values
y_pred = lr.predict(X_test)

from sklearn.metrics import r2_score, mean_squared_error, mean_absolute_error

r2 = r2_score(y_test, y_pred) #how well it fits
mse = mean_squared_error(y_test, y_pred) #squared average distance between predicted and actual values. Lower is better
mae = mean_absolute_error(y_test, y_pred) #absolute distance  between predicted and actual values. Lower is better
intercept = lr.intercept_ #starting point of the regssion line on the y-axis, value of dependent variable when features are zero
#if positive, target increase as feature increase, negative opposite
print(r2, mse, mae, intercept)

import matplotlib.pyplot as plt

#predicted vs actual
plt.scatter(y_test, y_pred, alpha=0.5)
plt.plot([y.min(), y.max()], [y.min(), y.max()], color='red')

sns.jointplot(x=y_test, y=y_pred, kind='reg')

#residuals
sns.regplot(x=y_pred, y=y_test - y_pred)